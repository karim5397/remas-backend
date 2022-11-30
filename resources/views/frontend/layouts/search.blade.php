<div class="sidebar-modal">

    <div class="modal  fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-close-cross"></i></span></button>

                </div>



                <div class="modal-body">

                   <form method="get" action="{{route('projects.search')}}">

                       <input type="search" name="search" placeholder="Search our projects..."  class="form-control" value="{{session()->get('search')}}">

                       <button type="submit" class="default-btn"><i class="flaticon-search"></i></button>

                   </form>

                </div>

            </div><!-- modal-content -->

        </div><!-- modal-dialog -->

    </div><!-- modal -->

</div>
