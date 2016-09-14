<div class="col-md-12">
  <div class="col-md-6">
    <h4>All Checked Inquiries</h4>
  </div>
  <div class="col-md-6">
     {!! Form::open(['method'=>'GET','url'=>'inquiries','class'=>'navbar-form navbar-right','role'=>'search'])  !!}
     <div class="input-group custom-search-form">
         <input type="text" class="form-control" name="search" placeholder="Search...">
         <span class="input-group-btn">
             <button class="btn btn-default-sm" type="submit">
                 <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
             </button>
         </span>
     </div>
     {!! Form::close() !!}
 </div><br><br><br>
</div>

 <table class="table">
   <thead class="thead-inverse">
     <tr>
       <th>Status</th>
       <th>Name</th>
       <th>Email</th>
       <th>Cellphone#</th>
       <th>Telephone#</th>
     </tr>
   </thead>
   <tbody>
      @foreach($inquiries as $inquiry)

        @if($inquiry->status == 1)
        <tr>

           <td>

                {{ Form::checkbox('status2', $inquiry->status, true) }}
                {!! Form::label('status2', ' ', ['class' => 'control-label']) !!}


           </td>
           <td>{{$inquiry->name}}</td>
           <td>{{$inquiry->email}}</td>
           <td>{{$inquiry->celnumber}}</td>
           <td>{{$inquiry->telnumber}}</td>

           <td>


             <a href="#{{$inquiry->id}}" class="btn btn-info inquirymodal-trigger pull-right">View Message</a>

             <div id="{{$inquiry->id}}" class="modal" style="height: 50%;">
               <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
               <div class="" style="padding: 5%;">
                <h4>{{$inquiry->name}}</h4><hr>
                <div class="col-md-12">

                  <div class="col-md-7">
                    <h6>Message</h6><br>
                    <p>{{$inquiry->message}}</p>
                  </div>
                  <div class="col-md-5">
                    <h6>Email : {{$inquiry->email}}</h6><hr>
                    <h6>Cellphone Number : {{$inquiry->celnumber}}</h6><hr>
                    <h6>Telephone Number : {{$inquiry->telnumber}}</h6><hr>
                  </div>
                  <hr>
                  {!! Form::model($inquiry, [
                     'method' => 'PATCH',
                     'route' => ['inquiries.update', $inquiry->id]
                  ]) !!}
                  @if($inquiry->status == 0)
                  {!! Form::hidden('status', 1, ['class' => 'form-control']) !!}
                  @endif
                  @if($inquiry->status == 1)
                  {!! Form::hidden('status', 0, ['class' => 'form-control']) !!}
                  @endif
                  {!! Form::submit('Mark as contacted', ['class' => 'btn btn-primary pull-right']) !!}
                  {!! Form::close() !!}
              </div>
              </div>
            </div>
           </td>

       </tr>

        @endif
      @endforeach

   </tbody>
 </table>

{{ $inquiries->links() }}
</div>
