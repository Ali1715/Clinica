<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Analisi;
use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class OCRController extends Controller
{
    public function index()
    {
        return view('archivo.index');
    }


    public function imageOCR(Request $request)
    {

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Valida que sea una imagen
        ]);
        $imageFile = $request->file('file');

        // Tu credencial JSON 
        putenv('GOOGLE_APPLICATION_CREDENTIALS=D:\Laragon\laragon\www\Clinica/credencial.json');

        // Crea una instancia ImageAnnotatorClient
        $imageAnnotator = new ImageAnnotatorClient();

        // Lee la imagen
        $image = file_get_contents($imageFile->getPathname());

        // Detecta el texto, hace un dd($response) para que le entendas mejor
        $response = $imageAnnotator->textDetection($image);
        
        
        $texts = $response->getTextAnnotations();
        
        

        $wordInfo = [];
        
        // Del array texts saco el valor descripcion y sus vertices y lo meto en este nuevo array
        foreach (iterator_to_array($texts) as $index => $text) {
            if ($index === 0) {
                continue;
            }
            $description = $text->getDescription();
            $vertices = $text->getBoundingPoly()->getVertices();
            $wordInfo[] = [
                'word' => $description,
                'boundingBox' => [
                    'x' => $vertices[0]->getX(),
                    'y' => $vertices[0]->getY(),
                ],
                'check_value' => 1,
            ];
        }
        
         // Consulta la base de datos para obtener precios de análisis
         $analysisPrices = [];
          // Lo que te comentaba de comparar los X y Y para saber si estan en la misma linea
        //Les puse si estan en -35  +35 en Y es porque estan en la misma linea
        foreach ($wordInfo as $index => $wordData) {
            if ($wordInfo[$index]['check_value'] == 1) {
                $wordInfo[$index]['check_value'] = 0;
                $currentY = $wordData['boundingBox']['y'];
                $concatenatedWord = $wordData['word'];

                foreach ($wordInfo as $otherIndex => $otherWordData) {
                    if ($otherWordData['check_value'] == 1) {
                        $otherY = $otherWordData['boundingBox']['y'];
                
                        if ($otherY >= $currentY - 18 && $otherY <= $currentY + 18) {
                            $concatenatedWord .= ' ' . $otherWordData['word'];
                            $wordInfo[$otherIndex]['check_value'] = 0;
                        }
                    }

                   
                    
                }
               
                $analysisPrices[] = $concatenatedWord; 
                if (stripos($concatenatedWord, ' SI') !== false) {
                    $siWords[] = str_ireplace(' SI', '', $concatenatedWord);
                
            }
        }
    }
        //aqui quiero que se guarde en un array y elimine los si
        
      
        
         $imageAnnotator->close();
         
         $totalCost = $this->getTotalCostFromDatabase($siWords);
         $result = $this->getPricesFromDatabase($siWords);

          
         return view('archivo.index', [
            'result' => $result,  // Paso el resultado como variable 'result'
            'totalCost' => $totalCost,  // Paso el costo total como variable 'totalCost'
            'success' => 'Imagen subida correctamente',
        ]);
         }
         private function getPricesFromDatabase($siWords)
         {
             // Consulta a la base de datos para obtener los precios según los nombres en $siWords
             // Implementa la lógica para obtener los precios de la base de datos
             // Por ejemplo, usando Eloquent
         
             // Recorre los nombres en $siWords y busca el precio en la base de datos
             $result = [];
             foreach ($siWords as $name) {
                 $analysis = Analisi::where('Nombre', $name)->first();
         
                 // Si se encuentra el nombre, guarda el precio; de lo contrario, guarda 'No disponible'
                 $result[$name] = $analysis ? $analysis->Precio : 'No disponible';
             }
         
             return $result;
            } 
            private function getTotalCostFromDatabase($siWords)
            {
                $totalCost = 0;
                foreach ($siWords as $name) {
                    $analysis = Analisi::where('Nombre', $name)->first();
                    if ($analysis) {
                        $totalCost += $analysis->Precio;
                    }
                }
                return $totalCost;
            }

}

