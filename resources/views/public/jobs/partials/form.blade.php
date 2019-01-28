<div class="form-group">
  <label for="job_name">Nombre del Trabajo</label>
  <input type="text" id="job_name" class="form-control {{$errors->has('job_name')?"is-invalid":""}}" name="job_name" placeholder="Introduzca el nombre del trabajo" value="{{isset($job)?$job->job_name:old('job_name')}}" required>
  @if ($errors->has('job_name'))
    <div class="invalid-feedback">
        {{$errors->first('job_name')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="creator">Creador</label>
  <input type="text" id="creator" class="form-control {{$errors->has('creator')?"is-invalid":""}}" name="creator" placeholder="Introduzca su nombre" value="{{isset($job)?$job->creator:old('creator')}}" required>
  @if ($errors->has('creator'))
    <div class="invalid-feedback">
        {{$errors->first('creator')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="description">Descripcion</label>
  <textarea class="form-control {{$errors->has('description')?"is-invalid":""}}" id="description" name="description" rows="3" placeholder="Descripcion del trabajo" required>{{isset($job)?$job->description:old('description')}}</textarea>
  @if ($errors->has('description'))
    <div class="invalid-feedback">
        {{$errors->first('description')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="email_creator">Email</label>
  <input type="text" id="email_creator" class="form-control  {{$errors->has('email_creator')?"is-invalid":""}}" name="email_creator" placeholder="Introduzca su email" value="{{isset($job)?$job->email_creator:old('email_creator')}}" required>
  @if ($errors->has('email_creator'))
    <div class="invalid-feedback">
        {{$errors->first('email_creator')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="province">Provincia</label>
  <select class="form-control  {{$errors->has('province')?"is-invalid":""}}" name="province" required>
    <option value='alava'>Álava</option>
    <option value='albacete'>Albacete</option>
    <option value='alicante'>Alicante/Alacant</option>
    <option value='almeria'>Almería</option>
    <option value='asturias'>Asturias</option>
    <option value='avila'>Ávila</option>
    <option value='badajoz'>Badajoz</option>
    <option value='barcelona'>Barcelona</option>
    <option value='burgos'>Burgos</option>
    <option value='caceres'>Cáceres</option>
    <option value='cadiz'>Cádiz</option>
    <option value='cantabria'>Cantabria</option>
    <option value='castellon'>Castellón/Castelló</option>
    <option value='ceuta'>Ceuta</option>
    <option value='ciudadreal'>Ciudad Real</option>
    <option value='cordoba'>Córdoba</option>
    <option value='cuenca'>Cuenca</option>
    <option value='girona'>Girona</option>
    <option value='laspalmas'>Las Palmas</option>
    <option value='granada'>Granada</option>
    <option value='guadalajara'>Guadalajara</option>
    <option value='guipuzcoa'>Guipúzcoa</option>
    <option value='huelva'>Huelva</option>
    <option value='huesca'>Huesca</option>
    <option value='illesbalears'>Illes Balears</option>
    <option value='jaen'>Jaén</option>
    <option value='acoruña'>A Coruña</option>
    <option value='larioja'>La Rioja</option>
    <option value='leon'>León</option>
    <option value='lleida'>Lleida</option>
    <option value='lugo'>Lugo</option>
    <option value='madrid'>Madrid</option>
    <option value='malaga'>Málaga</option>
    <option value='melilla'>Melilla</option>
    <option value='murcia'>Murcia</option>
    <option value='navarra'>Navarra</option>
    <option value='ourense'>Ourense</option>
    <option value='palencia'>Palencia</option>
    <option value='pontevedra'>Pontevedra</option>
    <option value='salamanca'>Salamanca</option>
    <option value='segovia'>Segovia</option>
    <option value='sevilla'>Sevilla</option>
    <option value='soria'>Soria</option>
    <option value='tarragona'>Tarragona</option>
    <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
    <option value='teruel'>Teruel</option>
    <option value='toledo'>Toledo</option>
    <option value='valencia'>Valencia/Valéncia</option>
    <option value='valladolid'>Valladolid</option>
    <option value='vizcaya'>Vizcaya</option>
    <option value='zamora'>Zamora</option>
    <option value='zaragoza'>Zaragoza</option>
  </select>
  @if ($errors->has('province'))
    <div class="invalid-feedback">
        {{$errors->first('province')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="payment">Sueldo</label>
  <input type="text" id="payment" class="form-control  {{$errors->has('payment')?"is-invalid":""}}" name="payment" placeholder="Introduzca un sueldo con un formato 100.0" value="{{isset($job)?$job->payment:old('payment')}}" required>
  @if ($errors->has('payment'))
    <div class="invalid-feedback">
        {{$errors->first('payment')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="category">Categoria</label>
  <select class="form-control  {{$errors->has('category')?"is-invalid":""}}" name="category" required>
    <option value='hosteleria'>Hosteleria</option>
    <option value='transporte'>Transporte</option>
    <option value='buzoneo'>Buzoneo</option>
    <option value='alimentacion'>Alimentacion</option>
  </select>
  @if ($errors->has('category'))
    <div class="invalid-feedback">
        {{$errors->first('category')}}
    </div>
  @endif
</div>

<div class="form-group">
  <label for="expired_at">Fecha de Expiración</label>
  <input type="date" id="expired_at" class="form-control  {{$errors->has('expired_at')?"is-invalid":""}}" name="expired_at" required>
  @if ($errors->has('expired_at'))
    <div class="invalid-feedback">
        {{$errors->first('expired_at')}}
    </div>
  @endif
</div>
