<?php

namespace App\Exports;

use App\Models\TadFeedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FeedbackExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return TadFeedback::orderBy('created_at', 'asc')->get([
            'reference_no',
            'name',
            'class',
            'boards',
            'address',
            'mobile',
            'father_name',
            'father_mobile',
            'mother_name',
            'mother_mobile',
            'email',
            'feedback',
            'created_at'
        ]);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Reference No',
            'Name',
            'Class',
            'Boards',
            'Address',
            'Mobile',
            'Father Name',
            'Father Mobile',
            'Mother Name',
            'Mother Mobile',
            'Email',
            'Feedback',
            'Created At'
        ];
    }
}
