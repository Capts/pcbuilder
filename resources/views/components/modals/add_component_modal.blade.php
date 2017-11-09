<!-- Modal -->
<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-plus-circle"></i> <b>Add Components</b> <i class="fa fa-times pull-right text-primary" data-dismiss="modal" aria-label="Close"></i></h5>
        
      </div>

      <div class="modal-body">

          <div class="row">
            {!! Form::open(['method' => 'POST', 'route' => 'component.store']) !!}
              
              <div class="col-md-12">
                
                <div class="form-group{{ $errors->has('component_type') ? ' has-error' : '' }}">
                  {!! Form::label('component_type', 'Component type') !!}
                    <select name="component_type" class="form-control" id="component_type" required="">
                      @if ($component_type)
                        <option disabled selected>Select type</option>
                        @foreach ($component_type as $ct)
                          <option value="{{ $ct->component_name }}">{{ ucfirst($ct->component_name) }}</option>
                          
                        @endforeach
                      @endif
                    </select>
                </div>

                <div class="form-group{{ $errors->has('component_name') ? ' has-error' : '' }}">
                    {!! Form::label('component_name', 'Name') !!}
                    {!! Form::text('component_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('component_name') }}</small>
                </div>

                <div class="form-group{{ $errors->has('component_price') ? ' has-error' : '' }}" style="padding:5px 5px;">
                    {!! Form::label('component_price', 'Price (₱)') !!}
                    {!! Form::number('component_price', null, ['min' => 0,'class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('component_price') }}</small>
                </div>

                <div class="form-group{{ $errors->has('component_qty') ? ' has-error' : '' }}" style="padding:5px 5px;">
                    {!! Form::label('component_qty', 'Quantity') !!}
                    {!! Form::number('component_qty', null, ['min' => 0,'class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('component_qty') }}</small>
                </div>

              </div>

              
              <div class="form-group{{ $errors->has('component_desc') ? ' has-error' : '' }}" style="padding:5px 5px;margin-left:15px;">
                  {!! Form::label('component_desc', 'Description') !!} <br> 
                  {!! Form::textarea('component_desc', null, ['class' => 'field' ,'size' => '77x8','required' => 'required', 'style' => 'resize:none;']) !!}
                  <small class="text-danger">{{ $errors->first('component_desc') }}</small>
              </div>
              


              <div class="row" style="padding-right:30px; ">
                {!! Form::submit('Add Component', ['class' => 'btn bg-olive btn-flat pull-right']) !!}
              </div>
            {!! Form::close() !!}
              

               
            
            
          </div>
      </div>

     
    </div>
  </div>
</div>