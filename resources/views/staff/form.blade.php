<div class="row">
    
    <div class="form-group col-lg-6 ">
        <label>{{ 'name' }}</label>
        <input class="form-control form-control-sm" name="name" type="text" value="{{ isset($staff->name) ? $staff->name : ''}}" > 
    </div>

    <div class="form-group col-lg-6 ">
        <label>{{ 'age' }}</label>
        <input class="form-control form-control-sm" name="age" type="number" value="{{ isset($staff->age) ? $staff->age : ''}}" > 
    </div>

    <div class="form-group col-lg-6 ">
        <label>{{ 'salary' }}</label>
        <input class="form-control form-control-sm" name="salary" type="number" value="{{ isset($staff->salary) ? $staff->salary : ''}}" > 
    </div>

    <div class="form-group col-lg-6 ">
        <label>{{ 'phone' }}</label>
        <input class="form-control form-control-sm" name="phone" type="number" value="{{ isset($staff->phone) ? $staff->phone : ''}}" > 
    </div>
    
</div>
