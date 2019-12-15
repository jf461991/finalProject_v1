<!-- {!! Form::open(array('url'=>'personal/docentes','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="searchText" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
            </div>
        </div>
    </div>
</div>            
{!! Form::close()!!} -->

{!! Form::open(['url'=>'/teachers/','method'=>'GET','autocomplete'=>'off','role'=>'search']) !!}
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
            <div class="form-group"> 
                <div class="input-group">
                    <input type="text" class="form-control" name="searchText" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </span>
                </div>
            </div> 
        </div>
    </div>  
{!! Form::close() !!}