<?php

namespace App\Exports;

use App\Models\Rooms;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RoomsExport implements FromCollection,WithHeadings
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $rows = Rooms::where('delete_status','0')->get();
        $i = 1;     
        foreach ($rows as $key => $value) {
              $result["No"]  = $i++;
              $result["Room No"]      = ucfirst($value->room_no);
              $result["Status"]     = ucfirst($value->status);
              $data[] =$result;
        }
       return collect($data);
    }

    public function headings(): array
    {
        return [
            'No','Room No','Status'
        ];
    } 

}
