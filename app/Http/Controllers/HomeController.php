<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Google\Cloud\Speech\V1\SpeechClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function transcribeAudio(Request $request)
    {
        // Valida que se haya enviado un archivo de audio
        if ($request->hasFile('audio_file')) {
            $audioFile = $request->file('audio_file');
            $filePath = $audioFile->getRealPath();

            // Configura el cliente de Google Cloud Speech-to-Text
            $speechClient = new SpeechClient([
                'credentials' => storage_path('google-credentials/myapp-386023-29ff015714a8.json'), // Ruta a tus credenciales
            ]);

            // Realiza la transcripción del audio
            $config = [
                'encoding' => 'LINEAR16',
                'sampleRateHertz' => 16000,
                'languageCode' => 'es-ES', // Cambia el código de idioma según tus necesidades
            ];

            $audio = ['uri' => $filePath];
            $response = $speechClient->recognize($config, $audio);

            // Obtiene los resultados de la transcripción
            $transcriptions = [];
            foreach ($response->getResults() as $result) {
                $transcriptions[] = $result->getAlternatives()[0]->getTranscript();
            }

            // Devuelve la transcripción como JSON
            return response()->json(['transcripciones' => $transcriptions]);
        } else {
            return response()->json(['error' => 'No se envió un archivo de audio válido.']);
        }
    }
}
