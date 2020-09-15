<div class="col-md-6 mx-auto">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row text-center">
                <div class="col-md-6 mx-auto">
                    <img alt="avatar" src="<?php echo asset_url();?>assets/img/bus.jpeg" style="margin-top: 10px;"
                        width="150px" height="150px" class="img img-fluid" />
                </div>
            </div>

            <h4 class="text-center" style="margin-top: 20px;">Find Buses</h4>
            <hr>

        </div>
        <div class="widget-content widget-content-area">
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">FROM</label>
                        <select id="inputState" class="form-control selectpicker">
                            <option selected="">Choose...</option>
                            <option>Colombo</option>
                            <option>Galle</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">TO</label>
                        <select id="inputState" class="form-control selectpicker">
                            <option selected="">Choose...</option>
                            <option>Colombo</option>
                            <option>Galle</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">DATE</label>
                        <input id="basicFlatpickr" value="2019-09-04"
                            class="form-control flatpickr flatpickr-input active" type="text"
                            placeholder="Select Date..">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">BUS TYPE</label>
                        <select id="inputState" class="form-control selectpicker">
                            <option selected="">Choose...</option>
                            <option>Normal</option>
                            <option>Highway</option>
                            <option>AC</option>
                            <option>Semi Luxury</option>
                        </select>
                    </div>
                </div>
                <a href="<?php echo base_url('Passenger/view_available_buses') ?>" class="btn btn-primary btn-lg"
                    style="width: 40%;">Search </a>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view("common/footer"); ?>