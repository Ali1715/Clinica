<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
 
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        // Return a collection of data to be exported to CSV
        return collect([
            ['Total Facturado', $this->data['totalFacturado']],
            // Add other rows as needed
        ]);
    }
}
