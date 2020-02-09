<?php 

namespace VoyagerExcel\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class PostExport implements FromCollection
{
    public function collection()
    {
        return collect([
            [
                'id',
                'name',
            ],
            [
                1,
                'wang',
            ],
            [
                2,
                'honglei'
            ]
        ]);
    }
}