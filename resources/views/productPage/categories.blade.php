@foreach($category as $cgr)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{route('user.products.category',$cgr ->id)}}">{{$cgr -> name}}</a></h4>
                </div>
            </div>
@endforeach