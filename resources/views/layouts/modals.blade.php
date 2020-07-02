<div class="modal animated pulse text-left" id="rollIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel41"
    aria-hidden="true">
    <div class="modal-dialog" style="width:600px;max-width:100%" role="document">
        <div class="modal-content">
            @if ($type == 'add-currency')
            <div class="modal-header">
                <h4 class="modal-title" id="">Add currency</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.settings.add.currency')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" placeholder="eg US Dollar" class="form-control">
                            <div class="form-control-position">
                                <i class="la la-money line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Symbol </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="symbol" placeholder="eg $" class="form-control">
                            <div class="form-control-position">
                                <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>ISO</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="iso" placeholder="eg USD" class="form-control">
                            <div class="form-control-position">
                                <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="Create">
                </div>
            </form>
            @elseif($type == 'update-currency')
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel41">Update currency</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.settings.update.currency',$currency->id)}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" value="{{$currency->name}}" placeholder="eg US Dollar"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-money line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Symbol </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="symbol" value="{{$currency->symbol}}" placeholder="eg $"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>ISO</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="iso" value="{{$currency->iso}}" placeholder="eg USD"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                </div>
            </form>
            @elseif($type == 'add-plan')
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel41">Add Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.settings.add.plan')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" value="" placeholder="eg Silver" class="form-control">
                            <div class="form-control-position">
                                <i class="la la-book line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Price </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="price" value="" placeholder="eg 1000" class="form-control">
                            <div class="form-control-position">
                                <i class="la la-dollar  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-2">Plan Features <span class="float-right btn btn-primary btn-sm"
                            onclick="addElement({type:'add-plan-feature',append_to:'.plan-features'})"><i
                                class="la la-plus"></i></span>
                    </h4>
                    <div class="plan-features">

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                </div>
            </form>
            @elseif($type == 'update-plan')
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel41">Add Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.settings.update.plan',$plan->id)}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" value="{{$plan->name}}" placeholder="eg Silver"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-book line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Price </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="price" value="{{$plan->price}}" placeholder="eg 1000"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-dollar  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-2">Plan Features <span class="float-right btn btn-primary btn-sm"
                            onclick="addElement({type:'add-plan-feature',append_to:'.plan-features'})"><i
                                class="la la-plus"></i></span>
                    </h4>
                    <div class="plan-features">
                        @if($plan->features()->count() > 0)
                        @foreach ($plan->features as $feature)
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <input type="text" name="values[]" value="{{$feature->value}}" placeholder="eg USD"
                                    class="form-control" required>
                                <div class="form-control-position d-block"
                                    onclick="removePlanFeature({element:$(this),url:'{{route('admin.settings.remove.plan.feature',$feature->id)}}'})">
                                    <i class="la la-times danger text-sm icon-align"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                </div>
            </form>
            @elseif($type == 'edit-trade')
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel41">Add Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{route('admin.settings.update.plan',$trade->id)}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" value="{{$trade->currency->name}}" placeholder="eg Silver"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-book line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Amount Paid </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="name" value="{{$trade->amount}}" placeholder="eg Silver"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-book line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Profit </label>
                        <div class="position-relative has-icon-left">
                            <input type="text" name="price" value="{{$trade->profit}}" placeholder="eg 1000"
                                class="form-control">
                            <div class="form-control-position">
                                <i class="la la-dollar  line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
