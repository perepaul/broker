@if($type == 'add-plan-feature')
<div class="form-group">
    <div class="position-relative has-icon-right">
        <input type="text" name="{{$name ?? 'values[]' }}" value="" placeholder="{{$placeholder ?? 'eg USD' }}" class="form-control" required>
        <div class="form-control-position d-block" onclick="removeElement($(this).parentsUntil('.form-group'))">
            <i class="la la-times danger text-sm icon-align"></i>
        </div>
    </div>
</div>
@endif
