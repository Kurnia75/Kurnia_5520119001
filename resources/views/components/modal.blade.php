<div id="myModal" class="modal fade" role="dialog">
    {{ $slot }}
    <div class="modal-dialog">
        <!-- content modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">MODAL</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <p>Isi dalam modal.</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">footer MODAL</button>
            </div>
        </div>
    </div>
</div>
