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
                <form method="POST" action="{{ route('admin.settings.add.currency') }}">
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
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Create">
                    </div>
                </form>
            @elseif ($type == 'add-trade-currency')
                <div class="modal-header">
                    <h4 class="modal-title" id="">Add Trade Currency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.settings.add.trade.currency') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-heading text-right mb-2">
                            <span class=" btn btn-primary btn-sm"
                                onclick="addElement({type:'add-plan-feature',append_to:'.trade_currencies',name:'name[]',placeholder:'eg. USDGBP'})"><i
                                    class="la la-plus"></i></span>
                        </div>
                        <div class="trade_currencies">
                            <div class="form-group">
                                {{-- <label>Name </label> --}}
                                <div class="position-relative has-icon-left">
                                    <input type="text" name="name[]" placeholder="eg USDGBP" class="form-control"
                                        required>
                                    <div class="form-control-position">
                                        <i class="la la-money line-height-1 text-muted icon-align"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Create">
                    </div>
                </form>
            @elseif ($type == 'update-trade-currency')
                <div class="modal-header">
                    <h4 class="modal-title" id="">Add Trade Currency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.settings.update.trade.currency', $trade_currency->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-heading text-right mb-2">
                            <span class=" btn btn-primary btn-sm"
                                onclick="addElement({type:'add-plan-feature',append_to:'.trade_currencies',name:'name[]',placeholder:'eg. USDGBP'})"><i
                                    class="la la-plus"></i></span>
                        </div>
                        <div class="trade_currencies">
                            <div class="form-group">
                                {{-- <label>Name </label> --}}
                                <div class="position-relative has-icon-left">
                                    <input type="text" value="{{ $trade_currency->name }}" name="name"
                                        placeholder="eg USDGBP" class="form-control" required>
                                    <div class="form-control-position">
                                        <i class="la la-money line-height-1 text-muted icon-align"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                    </div>
                </form>
            @elseif($type == 'update-currency')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Update currency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.settings.update.currency', $currency->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="name" value="{{ $currency->name }}" placeholder="eg US Dollar"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Symbol </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="symbol" value="{{ $currency->symbol }}" placeholder="eg $"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>ISO</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="iso" value="{{ $currency->iso }}" placeholder="eg USD"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-bitcoin  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
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
                <form method="POST" action="{{ route('admin.settings.add.plan') }}">
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
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
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
                <form method="POST" action="{{ route('admin.settings.update.plan', $plan->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="name" value="{{ $plan->name }}" placeholder="eg Silver"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-book line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Price </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="price" value="{{ $plan->price }}" placeholder="eg 1000"
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
                            @if ($plan->features()->count() > 0)
                                @foreach ($plan->features as $feature)
                                    <div class="form-group">
                                        <div class="position-relative has-icon-right">
                                            <input type="text" name="values[]" value="{{ $feature->value }}"
                                                placeholder="eg USD" class="form-control" required>
                                            <div class="form-control-position d-block"
                                                onclick="removePlanFeature({element:$(this),url:'{{ route('admin.settings.remove.plan.feature', $feature->id) }}'})">
                                                <i class="la la-times danger text-sm icon-align"></i>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
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
                <form method="POST" action="{{ route('admin.trades.update.trade', $trade->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="currency" disabled value="{{ $trade->currency->name }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-book line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount Paid </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="amount" disabled value="{{ $trade->amount }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-book line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Profit </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="profit" value="{{ $trade->profit }}" placeholder="eg 1000"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-dollar  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                    </div>
                </form>
            @elseif($type == 'edit-user')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Firstname </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="firstname" value="{{ $user->firstname }}"
                                    placeholder="Firstname" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-book line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="lastname" value="{{ $user->lastname }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-book line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <div class="position-relative has-icon-left">
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="Lastname"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-envelope  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone </label>
                            <div class="position-relative has-icon-left">
                                <input type="textr" name="phone" value="{{ $user->phone }}" placeholder="Lastname"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-phone  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Balance </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="balance" value="{{ $user->balance }}" placeholder="Lastname"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Demo balance </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="demo_balance" value="{{ $user->demo_balance }}"
                                    placeholder="Demo Balance" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="password" placeholder="Password" class="form-control"
                                    value="{{ $user->vissible_password }}">
                                <div class="form-control-position">
                                    <i class="la la-key  line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                    </div>
                </form>
            @elseif($type == 'deposit-confirmation')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Confirm Deposit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('users.deposit.confirm', $deposit->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Method </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" value="BTC" class="form-control" readonly>
                                <div class="form-control-position">
                                    <i class="la la-bitcoin line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="amount" value="{{ $deposit->amount }}" placeholder="eg Silver"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirmatin screenshoot </label>
                            <div class="position-relative">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal"
                            value="Cancel">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Confirm">
                    </div>
                </form>
            @elseif($type == 'deposit-preview')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Deposit Preview</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('users.deposit.confirm', $deposit->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Method </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" value="BTC" class="form-control" readonly>
                                <div class="form-control-position">
                                    <i class="la la-bitcoin line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="amount" value="{{ $deposit->amount }}" placeholder="eg Silver"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ asset(config('constants.deposit_image_dir') . $deposit->image) }}"
                                target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset(config('constants.deposit_image_dir') . $deposit->image) }}" alt=""
                                    style="width: 250px; height:auto">
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
                        {{-- <input type="submit" class="btn btn-outline-primary btn-md" value="Confirm"> --}}
                    </div>
                </form>
            @elseif($type == 'withdrawal-preview')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Withdrawal Preview</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Wallet Address </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" value="{{ $withdrawal->address }}" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-bitcoin line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="amount"
                                    value="{{ $withdrawal->user->currency_symbol . $withdrawal->amount }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
                        {{-- <input type="submit" class="btn btn-outline-primary btn-md" value="Confirm"> --}}
                    </div>
                </form>
            @elseif($type == 'decline-withdrawal')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Withdrawal Decline</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data"
                    action="{{ route('admin.withdrawal.decline', $withdrawal->id) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Wallet Address </label>
                            <div class="position-relative has-icon-left">
                                <input type="text" value="{{ $withdrawal->address }}" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-bitcoin line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="amount"
                                    value="{{ $withdrawal->user->currency_symbol . $withdrawal->amount }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <textarea name="reason" id="reason" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Submit">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
                    </div>
                </form>
            @elseif($type=='upload-doc')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Upload Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="{{ route('users.document.upload') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="name" value="" placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-money line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Select Doc</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary btn-md" value="Submit">
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
                    </div>
                </form>
            @elseif($type=='preview-email')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">Email Preview</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>To</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="name" value="{{ $email->user->fullname }}"
                                    placeholder="eg Silver" class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-user line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" name="name" value="{{ $email->subject }}" placeholder="eg Silver"
                                    class="form-control">
                                <div class="form-control-position">
                                    <i class="la la-bell line-height-1 text-muted icon-align"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <div class="position-relative has-icon-left">
                                <textarea name="reason" id="reason" cols="30"
                                    rows="10">{{ $email->message }}</textarea>
                            </div>
                        </div>
                        @if (!is_null($email->attachment))
                            <div class="row">
                                @foreach ($email->attachment as $attach)
                                    <div class="col-md-6 p-1">
                                        @php
                                            $file = explode('.', $attach);
                                        @endphp
                                        @if (in_array(strtolower($file[1]), ['png', 'jpg', 'jpeg', 'gif', 'bmp']))
                                            <img src="{{ asset(config('constants.email_attachment_dir') . $attach) }}"
                                                alt="" class="img-responsive" style="width:100%; max-height:450px;">
                                        @else
                                            The attachment is not an image, click <a
                                                href="{{ asset(config('constants.email_attachment_dir') . $attach) }}"
                                                target="_blank">here</a> to view file
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        {{-- <input type="submit" class="btn btn-outline-primary btn-md" value="Submit"> --}}
                        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
                    </div>
                </form>
            @elseif($type == 'accept-user')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel41">User Verification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>User: {{ $user->fullname }}</h4>
                    <h6>Email: {{ $user->email }}</h6>
                    <div class="p-1">
                        <p>Documents</p>
                        <ul class="list-group">
                            @forelse ($user->documents as $document)
                                <li class="list-group-item  p-1">
                                    <span class="float-right">
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ asset(config('constants.document_dir') . $document->image) }}"
                                            target="_blank">
                                            <i class="la la-eye white"></i> Preview
                                        </a>
                                    </span>
                                    {{ $document->name }}
                                </li>
                            @empty
                                <li class="list-group-item p-1 text-center">
                                    No documents uploaded yet
                                </li>
            @endforelse
            </ul>
        </div>

    </div>
    <div class="modal-footer">
        <a href="{{ route('admin.users.accept', $user->id) }}" class="btn btn-outline-primary btn-md">Accept</a>
        <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
    </div @endif
</div>
</div>
</div>
