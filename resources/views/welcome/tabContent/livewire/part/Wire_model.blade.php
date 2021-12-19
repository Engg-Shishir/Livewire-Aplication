
<div class="card collapsed-card p-0">
    <div class="card-header">
        <h3 class="card-title">Wire:model</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>
                <a> wire_model="",wire_model_defer="" are use for pass input field value from blade file to class file.For every input typing this wire_model="" create a ajax request.If you type 50 times it create 50 ajax request.But wire_model_defer="" only create one ajax request when you submit the form</a>
                <div class="codeBox">
                    <xmp>
                        👇👇
                    </xmp>
                </div>
            </li>
            <li>
                <div class="codeBox">
                    <xmp>
                        wire:model="name"
                    </xmp>
                </div>
            </li>
            <li>  
                <div class="codeBox">
                    <xmp>
                        wire:model.defer="name"
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>
