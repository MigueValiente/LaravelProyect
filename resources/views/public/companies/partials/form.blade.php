<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce the company name" value="{{ isset($company)?$company->name:old('name') }}" required>
            @if( $errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col">
        @if(isset($company))
                  <img class="img-fluid" src="http://laravelproyect.test/storage/{{ $company->logo }}" alt="Company's logo">
                @endif
                <div class="form-group {{ $errors->has('logo')?"is-invalid":"" }}">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control-file mt-1" id="logo" name="logo" required>
                    @if( $errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                </div>
    </div>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control {{ $errors->has('address')?"is-invalid":"" }}" id="address" name="address" placeholder="Introduce the company address" value="{{ isset($company)?$company->address:old('address') }}"required>
    @if( $errors->has('address'))
    <div class="invalid-feedback">
        {{ $errors->first('address') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="email">Web</label>
    <input type="text" class="form-control {{ $errors->has('web')?"is-invalid":"" }}" id="web" name="web" rows="10" placeholder="Company Web" value="{{ isset($company)?$company->web:old('web') }}" required>
    @if( $errors->has('web'))
    <div class="invalid-feedback">
        {{ $errors->first('web') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control {{ $errors->has('email')?"is-invalid":"" }}" id="email" name="email" placeholder="Company Email" value="{{ isset($company)?$company->email:old('email') }}" required>
    @if( $errors->has('email'))
    <div class="invalid-feedback">
        {{ $errors->first('email') }}
    </div>
    @endif
</div>
