 @foreach($rows as $index=>$row)
 <?php
     $statusClass = 'danger';
     if($row['status'] == 'active') {
        $statusClass = 'success';
     }
 ?>
 <tr>
    <td class="customer_name">{{@$row->id}} </td>
    <td class="customer_name">{{@$row->email}}</td>
    <td class="customer_name">{{@$row->product->sum('total_price')}}</td>
    <td class="customer_name">{{@$row->created_at}}</td>
    <td class="status"><span class="badge badge-soft-{{$statusClass}} text-uppercase">{{@$row['status']}}</span></td>
    <td width="10%">
        <div class="d-flex gap-2">
            <div class="view">
                <button class="btn btn-soft-success" onClick="get_row({{$row['id']}})"><i class="ri-eye-2-line"></i></button>
            </div>
        </div>
    </td>
</tr>

@endforeach
