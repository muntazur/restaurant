@extends('layout.main')


@section('categories')
		
        <div class="left-panel">

                @foreach($categories as $category)
                   
                    <a class = "btn btn-primary form-control" href="/items/{{ $category->id }}">{{ $category->name }} </a> 

                @endforeach
        </div>

@endsection

@section('items')


        <div class="middle-panel">
               <ul> 
                @foreach($items as $item)
                    
                    <li align="center"> 

                        <a href=""><img class ="img-thumbnail" src="{{ asset('storage/'.$item->image) }}"> </a> 
                        <h5 style="color:black">{{ $item->name }} </h5> 
                        <h5 class = "btn btn-info btn-sm" style="color:black">Details </h5>
                         

                    </li>
                        
                    

                @endforeach

                <ul>
        </div>

@endsection

@section('order')

 <div class ="right-panel" align="center">

    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Order</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-header">

            <h4 class="modal-title">Order an Item</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body">
            
            <form action="" class="form-horizontal"> 

                <div class="form-group">

                    <label>Item</label>
                    <select class="form-control" style="width:50%">

                        <option value="">None</option>

                        <?php 
                            use App\Http\Controllers\CategoryAndItemController;
                            $items = CategoryAndItemController::getAllItem();

                            foreach ($items as $item) {
                                ?>
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                <?php
                            }
                         ?>

                    </select>

                </div>
                
                <div class="form-group">

                    <label>Email</label>
                    <input class="form-control" style="width:50%" type="email" name="email" placeholder="Enter email....">

                </div>

                <div class="form-group">

                    <label>Phone</label>
                    <input class="form-control" style="width:50%" type="text" name="phone" placeholder="Enter phone no....">

                </div>
                
                <div class="form-group">

                    <label>Address</label>
                    <textarea class="form-control" style="width:50%" name="address"></textarea>

                </div>

                <button class="btn btn-primary btn-sm">Add</button>

          </div>

          <div class="modal-footer">
           

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

      </div>

    </div>

</div>
@endsection