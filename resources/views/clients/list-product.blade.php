@extends('clients.base-sub-page')

@section('title_banner')
    Sản phẩm
@endsection

@section('page_css')
    <style>
        .menu {
            list-style-type:none;
            padding: 0;
        }
        .btn_category {
            border-bottom: 1px solid #ebebeb;
            cursor: pointer;
        }
        .menu .btn_category a:hover {
            color: #034982!important;
        }

        .card {
            box-shadow: 0px 5px 15px #20283114;
            border: 1px solid transparent;
            transition: .5s;
            padding: 10px;
            position: relative;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        .card .card-name {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 0px;
            position: relative;
            width: 100%;
            font-size: .9em;
        }

        .card .card-name a {
            margin: 0px;
            font-size: 16px;
            font-weight: 500;
            color: #000;
            transition: .5s;
        }

        .card .card-name a:hover {
            color: #034982!important;
        }

        .card-padding {
            padding: 0 9.8px 19.6px;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('page_content')
    <form id="filter-form" class="col-12">
        <input type="hidden" name="category" id="category">
    </form>

    <div class="container">
        <div class="row pt-3">
           <div class="col-9">
               <div class="row">
                   @foreach($products as $product)
                   <div class="col-4 card-padding">
                       <div class="card">
                           <img src="{{$product->image}}" alt="{{$product->name}}" height="200">
                           <div class="card-name" style="height: 50.8375px">
                               <a href="{{route('product-detail', $product->id)}}">{{$product->name}}</a>
                           </div>
                       </div>
                   </div>
                   @endforeach
               </div>
           </div>
           <div class="col-3">
               <h4 style="border-bottom: 1px solid #ebebeb">Danh mục sản phẩm</h4>
               <ul class="menu">
                   @foreach(\App\Models\Category::all() as $category)
                   <li class="pt-3 btn_category" slot="{{$category->id}}"><a>{{$category->name}}</a></li>
                   @endforeach
               </ul>
           </div>


       </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                // config
                $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                ?>
                <ul class="pagination justify-content-center">
                    @if($products->currentPage() != 1)
                        <li class="page-item"><a class="page-link"
                                                 href="{{$products->url($products->url(1))}}"><i
                                    class="fas fa-backward"></i></a>
                        </li>
                    @endif
                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <?php
                            $half_total_links = floor($link_limit / 2);
                            $from = $products->currentPage() - $half_total_links;
                            $to = $products->currentPage() + $half_total_links;
                            if ($products->currentPage() < $half_total_links) {
                                $to += $half_total_links - $products->currentPage();
                            }
                            if ($products->lastPage() - $products->currentPage() < $half_total_links) {
                                $from -= $half_total_links - ($products->lastPage() - $products->currentPage()) - 1;
                            }
                            ?>
                        @if ($from < $i && $i < $to)
                            <li class="page-item">
                                <a class="page-link {{ ($products->currentPage() == $i) ? ' active' : '' }}"
                                   href="{{ $products->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                    @if($products->currentPage() != $products->lastPage())
                        <li class="page-item"><a class="page-link"
                                                 href="{{$products->url($products->lastPage())}}"> <i
                                    class="fas fa-forward"></i> </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $(document).ready(function () {
            $('.btn_category').click(function () {
                $('#category').val(this.slot)
                $('#filter-form').submit()
            })
        });
    </script>
@endsection
