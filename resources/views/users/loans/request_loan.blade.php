@extends('layouts.users_master')

@section('content')
<div class="clearfix"></div>

<div class="col-lg-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">Loan Request Form</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <form id="icon_validate" action="#" novalidate="novalidate">

                <div class="row">
                    <div class="col-xs-12">

                        <div class="form-group has-error">
                            <label class="form-label">Name</label>
                            <span class="desc">e.g. "Light Labs"</span>
                            <div class="controls">
                                <i class="fa fa-times"></i>
                                <input type="text" class="form-control" name="formfield1" aria-required="true" aria-describedby="formfield1-error">
                            </div>
                        </div>

                        <div class="form-group has-error">
                            <label class="form-label">Email</label>
                            <span class="desc">e.g. "some@example.com"</span>
                            <div class="controls">
                                <i class="fa fa-times"></i>
                                <input type="text" class="form-control" name="formfield2" aria-required="true" aria-describedby="formfield2-error">
                            </div>
                        </div>

                        <div class="form-group has-error">
                            <label class="form-label">Phone No</label>
                            <span class="desc">e.g. "+122-222-7778"</span>
                            <div class="controls">
                                <i class="fa fa-times"></i>
                                <input type="text" class="form-control" name="formfield1" aria-required="true" aria-describedby="formfield1-error">
                            </div>
                        </div>
                        
                        {{-- <div class="form-group has-error">
                            <label class="form-label">Phone No</label>
                            <span class="desc">e.g. "+122-222-7778"</span>
                            <div class="controls">
                                <i class="fa fa-times"></i>
                                <input type="text" class="form-control" name="formfield1" aria-required="true" aria-describedby="formfield1-error">
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label class="form-label">Payment Date</label>
                            <div class="controls">
                                <input id="example-datetime-local-input" type="date" value="2020-06-23" placeholder="Month" class="form-control" name="" aria-required="true" aria-describedby="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Amount</label>
                            <div class="controls">
                                <select name="formfield8" class="form-control" name="" id="">
                                    <option value="">--Amount--</option>
                                    <option value="">$ <span>100</span> </option>
                                    <option value="">$ <span>200</span> </option>
                                    <option value="">$ <span>400</span> </option>
                                    <option value="">$ <span>1000</span> </option>
                                </select>
                                {{-- <input type="date" value="2020-06-23" placeholder="Month" class="form-control" name="" aria-required="true" aria-describedby=""> --}}
                            </div>
                        </div>

                        <div class="form-group has-error">
                            <label class="form-label">Why Do You Need the loan?</label>
                            <div class="controls">
                                <i class="fa fa-times"></i>
                                <textarea name="formfield1" class="form-control" cols="30" rows="10" aria-required="true" aria-describedby="formfield1-error"></textarea>
                            </div>
                        </div>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </section>
</div>

    
@endsection