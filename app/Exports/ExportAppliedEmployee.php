<?php

namespace App\Exports;

use App\Models\CareerApllies;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportAppliedEmployee implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Position',
            'Phone',
            'Massege',
        ];
    }

    public function collection()
    {
        return CareerApllies::select('name','email','position','phone','message')->get();
    }
}
