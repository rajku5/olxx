@extends('base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                        @foreach ($cat as $c)
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-header">{{$c->title}}</div>
                                    <div class="card-body">
                                        <ul>


                                            @foreach ($c->child as $p)
                                                <li><a href="">{{$p->title}}</a></li>
                                            @endforeach

                                            
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="col-lg-9 mt-5">
                <div class="row">
                    @foreach ($pro as $item)
                    <div class="col-lg-3">
                        <div class="card mb-2">
                            <img src="{{asset('products/'.$item->seller_image)}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4>₹{{$item->price}}</h4>
                                <h6>{{$item->pro_title}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 mx-auto">
                        {{$pro->links()}}
                    </div>

                </div>
                
            </div>
        </div>
    </div>
@endsection

