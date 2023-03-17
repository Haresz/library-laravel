<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::select('judul', 'pengarang', 'penerbit', 'sampul')->get();
    }

    /**
     * @return array<string, string>
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function headings(): array
    {
        return [
            'Judul',
            'Pengarang',
            'Penerbit',
            'Sampul',
        ];
    }
}
