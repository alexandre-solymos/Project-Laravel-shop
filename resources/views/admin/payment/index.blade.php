@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <a href="{{route('admin.index')}}" class="btn-grad">Retour</a>


        <div class="form-admin">
                <div class="form-group padding" style="padding: 3em;">
                    @foreach($payment as $payments)

                        <a class="btn-grad-product" href="{{ route('admin.payment.edit', $payments->id) }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.1925 7.70711C15.8019 7.31658 15.1688 7.31658 14.7782 7.70711L7.70718 14.7782C7.31665 15.1687 7.31665 15.8019 7.70718 16.1924C8.0977 16.5829 8.73087 16.5829 9.12139 16.1924L16.1925 9.12132C16.583 8.7308 16.583 8.09763 16.1925 7.70711Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C3 4.34315 4.34315 3 6 3H18C19.6569 3 21 4.34315 21 6V18C21 19.6569 19.6569 21 18 21H6C4.34315 21 3 19.6569 3 18V6ZM6 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18V6C5 5.44772 5.44772 5 6 5Z" fill="currentColor" /></svg>
                            Modifier les informations de stripes
                        </a>

                    @endforeach
                </div>
        </div>

    </div>


@stop
