<?php

namespace App\Exports;

use App\Models\Message;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMessage implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Company Name',
            'Phone',
            'Position',
            'Subject',
            'Massege',
        ];
    }

    public function collection()
    {
        return Message::select('name','email','company_name','phone','position','subject','message')->get();
    }
}
