
<div class="card collapsed-card p-0">
    <div class="card-header">
        <h3 class="card-title">Wire:ignore</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>
                <a> (wire:ignore,wire:ignore.self) prevent them to change, when every dom are re randerd by ajax request. But (wire:ignore) ignore this & this children dom property.Thatswhy when sensetive dom element (form)  is a children where (wire:ignore) are use, this also ignore form submit.So form not working properly. On the other hand (wire:ignore.self) only ignore self.Thatswhay it can't any impect its child dom element.</a>
                <div class="codeBox">
                    <xmp>
                        👇👇
                    </xmp>
                </div>
            </li>
            <li>
                <div class="codeBox">
                    <xmp>
                        <div class="modal fade" wire:ignore.self>
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form>
                                        </form>                       
                                    </div>
                                </div>
                            </div>
                          </div>
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>
