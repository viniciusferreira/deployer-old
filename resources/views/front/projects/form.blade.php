<form class="form-horizontal">
    <fieldset>
        <legend>Project</legend>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
            </div>
        </div>

        @if (array_key_exists('id', $project))
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Health Check URL</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                </div>
            </div>
        @endif
    </fieldset>

    <fieldset>
        <legend>Source Control</legend>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Provider</label>

            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />
                        GitHub
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />
                        BitBucket
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Repository</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" placeholder="user/repository">
            </div>
        </div>
    </fieldset>

    <div class="form-group form-actions">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>