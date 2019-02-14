@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="invoice p-3 pt-5 mb-3">
        <div class="row text-center">
            <div class="col-4">
                <h1>၀ေယံ</h1>
            </div>
            <div class="col-4">
                <h4>အမိန့်ရအပေါင်ဆိုင်</h4>
                <p>ဒါးပိန်လမ်းခွဲ၊ လှည်းကူးမြို့</p>
            </div>
            <div class="col-4">
                <p>No. {{ sprintf("%07d", $customer->id) }}</p>
                <p>Date. {{$customer->created_at->toDateString()}}</p>
            </div>
        </div><!-- /.row -->
        <hr>
        <div class="row info">
            <div class="col-4">
                ပစ္စည်းအမျိုးအမည်
            </div>
            <div class="col-8">
                {{ $customer->category }}
            </div>
            <div class="col-4">
                ကျောက်ပါအလေးချိန်
            </div>
            <div class="col-8">
                {{ $customer->w_kyat }}
                ကျပ်
                {{ $customer->w_pae }}
                ပဲ
                {{ $customer->w_ywae }}
                ရွေး
            </div>
            <div class="col-4">
                ထုတ်ချေးသောငွေရင်း
            </div>
            <div class="col-8">
                {{ number_format($customer->loan) }}ကျပ်
            </div>
            <div class="col-4">
            ပေါင်သူအမည်
            </div>
            <div class="col-8">
                {{ $customer->name }}
            </div>
            <div class="col-4">
                ပေါင်သူနေရပ်
            </div>
            <div class="col-8">
                {{ $customer->address }}
            </div>
        </div><!-- /.row -->
        <div class="row mt-5 no-print">
        <div class="col">
                <a href="#" target="_blink" class="btn btn-primary print">
                    <i class="fa fa-print"></i>
                    Print
                </a>
        </div>
        </div>
    </div><!-- /.invoice -->
</div><!-- /.container -->
<hr class="mt-5 d-none d-print-block dotted">
@endsection

@section('css')
<style>
.info .col-4 {
    padding-left: 200px;
    padding-bottom: 10px;
}
.info .col-8 {
    padding-left: 70px;
}
.dotted {
    border-top: 1px dashed #ccc;
}
</style>
@endsection

@section('js')
<script>
$('.print').click(function() {
    window.print()
});
</script>
@endsection