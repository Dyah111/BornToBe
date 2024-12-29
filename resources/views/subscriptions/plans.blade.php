@foreach ($plans as $plan)
    <form action="{{ route('payment.createTransaction') }}" method="POST">
        @csrf
        <input type="hidden" name="plan_name" value="{{ $plan['name'] }}">
        <input type="hidden" name="price" value="{{ $plan['price'] }}">
        <button type="submit">Pilih {{ $plan['name'] }} (Rp {{ number_format($plan['price']) }})</button>
    </form>
@endforeach
