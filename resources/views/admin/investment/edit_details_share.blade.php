<div id="edit-shares-{{$share->id}}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body p-10 text-center">
                <div class="preview">
                    <h2 class="text-lg font-medium mr-auto pb-4">
                        Edit Details of Shares
                    </h2>
                    <!-- BEGIN: Validation Form -->
                    <form action="{{route('share.update',$share->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Founding Date * </label>
                                    <input type="text" name="founding_date"  value="{{$share->founding_date}}" class="datepicker form-control w-100 block mx-auto" data-single-mode="true" > 

                                    {{-- <input type="text" class="form-control" name="founding_date"  value="{{$share->founding_date}}" > --}}
                                    @error('founding_date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-founding_date" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Followed Law * </label>
                                    <input type="text" class="form-control" name="followed_law"  value="{{$share->followed_law}}" >
                                    @error('followed_law')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-followed_law" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Purpose * </label>
                                    <input type="text" class="form-control" name="purpose"  value="{{$share->purpose}}" >
                                    @error('purpose')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-purpose" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Company Branches * </label>
                                    <input type="text" class="form-control" name="company_branches"  value="{{$share->company_branches}}" >
                                    @error('company_branches')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-company_branches" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Stock market date * </label>
                                    <input type="text" class="form-control" name="stock_market_date"  value="{{$share->stock_market_date}}" >
                                    @error('stock_market_date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-stock_market_date" ></div>
                                </div>
                                </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Version number * </label>
                                    <input type="text" class="form-control" name="version_number"  value="{{$share->version_number}}" >
                                    @error('version_number')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-version_number" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Par value * </label>
                                    <input type="text" class="form-control" name="par_value"  value="{{$share->par_value}}" >
                                    @error('par_value')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-par_value" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Number Shares * </label>
                                    <input type="text" class="form-control" name="number_shares"  value="{{$share->number_shares}}" >
                                    @error('number_shares')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-number_shares" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Issued Capital * </label>
                                    <input type="text" class="form-control" name="issued_capital"  value="{{$share->issued_capital}}" >
                                    @error('issued_capital')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-issued_capital" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Authorized Capital * </label>
                                    <input type="text" class="form-control" name="authorized_capital"  value="{{$share->authorized_capital}}" >
                                    @error('authorized_capital')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-authorized_capital" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Financial Year * </label>
                                    <input type="text" class="form-control" name="financial_year"  value="{{$share->financial_year}}" >
                                    @error('financial_year')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-financial_year" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">External Auditor * </label>
                                    <input type="text" class="form-control" name="external_auditor"  value="{{$share->external_auditor}}" >
                                    @error('external_auditor')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="text-left error-div-external_auditor" ></div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 md:col-span-12 sm:col-span-12">
                                <div class="input-form mt-5">
                                    <label  class="form-label w-full flex flex-col sm:flex-row">Vision Mission * </label>
                                    <textarea  class="form-control tinymce-editor" name="vision_mission">{{$share->vision_mission}}</textarea>
                                </div>
                                @error('vision_mission')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <div class="text-left error-div-vision_mission" ></div>
                            </div>
                        </div>
                
                    
                
                        
                        <button type="submit" class="btn btn-primary mt-5 w-full" id="update">Update </button>
                    </form>
                    <!-- END: Validation Form -->
                </div>
            </div>
        </div>
    </div>
</div>

