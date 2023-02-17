@foreach($admissionacademic as $key=>$admissionacademiclist)
<input value="{{ $admissionacademiclist->id }}" type="hidden" class="form-control mb-3" name="academic_id"/>
@endforeach
          
<select  class="form-control mb-3" name="degree_id" id="degree" required="required">
  <option>---- Select Degree ----</option>
@foreach($managedegree as $key=>$managedegreelist)
  <option value="{{ $managedegreelist->id }}">{{ $managedegreelist->degree_name }}</option>
@endforeach
</select> 

<select  class="form-control mb-3" name="department_id" id="department" required="required">
  <option>---- Select Department ----</option>
</select> 