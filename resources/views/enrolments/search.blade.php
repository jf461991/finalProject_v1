{!! Form::open(['url'=>'/enrolments/','method'=>'GET','autocomplete'=>'off','role'=>'search']) !!}
    <div class="row">
        
            <div class="form-group col-sm-4"> 
                <div class="input-group">
                    <input type="text" class="form-control" name="searchText" placeholder="Digite cédula del estudiante" maxlength="10">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </span>
                </div>
            </div> 
        
    </div>

    <div class="row">

            <div class="form-group col-sm-4">
                <label for="">Periodos:</label>
                <select name="periodos" class="form-control" id="per_period">
                    <option value="">...</option>
                    @foreach($periods as $per)
                        <option value="{!! $per->per_id !!}">{!! $per->per_name !!} - {!! $per->per_letter !!}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-sm-4">
                <label for="">Grados:</label>
                <select name="grados" class="form-control" id="lev_level">
                    <option value="">...</option>
                    @foreach($levels as $lev)
                        <option value="{!! $lev->lev_id !!}">{!! $lev->lev_name !!} - {!! $lev->lev_parallel !!} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-sm-4">
                <label for="">
                    <br> </label>
                <button type="submit" class="btn btn-success form-control">Buscar</button>
            </div>

        
    </div>    
{!! Form::close() !!}