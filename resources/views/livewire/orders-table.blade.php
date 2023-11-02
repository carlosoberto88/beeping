<div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Order Ref</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Total Qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->order_ref }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->orderLines->sum('qty') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>