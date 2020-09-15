<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <style>
    .layout-px-spacing {
        min-height: calc(100vh - 96px) !important;
    }

    .star-icon {
        font-size: 30px;
        color: rgb(173, 114, 3);
        border: 1px solid black;
        margin-right: 10px;
        outline-color: 1px solid black;
    }
    </style>


</head>

<body>


    <div class="card component-card_4" style="width: 100%;">
        <div class="card-body">
            <div class="user-info">
                <h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">Colombo -
                    Thangalla 2020-09-02 ( Siriwardhana Super Line )</h4>
                <div class="row">
                    <div class="col-md-8">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Bus Type</th>
                                    <td style="padding-left: 40px;">Semi Luxury</td>
                                </tr>
                                <tr>
                                    <th>Bus Number</th>
                                    <td style="padding-left: 40px;">N/A 8867</td>
                                </tr>
                                <tr>
                                    <th>Route Number</th>
                                    <td style="padding-left: 40px;">02</td>
                                </tr>
                                <tr>
                                    <th>Seat Number</th>
                                    <td style="padding-left: 40px;">12</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h6>LKR 320.00</h6><br>
                        <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Rate Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card component-card_4" style="width: 100%;margin-top: 20px;">
        <div class="card-body">
            <div class="user-info">
                <h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">Colombo -
                    Thangalla 2020-08-02 ( Chandimal Super Line )</h4>
                <div class="row">
                    <div class="col-md-8">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Bus Type</th>
                                    <td style="padding-left: 40px;">Semi Luxury</td>
                                </tr>
                                <tr>
                                    <th>Bus Number</th>
                                    <td style="padding-left: 40px;">N/A 8267</td>
                                </tr>
                                <tr>
                                    <th>Route Number</th>
                                    <td style="padding-left: 40px;">02</td>
                                </tr>
                                <tr>
                                    <th>Seat Number</th>
                                    <td style="padding-left: 40px;">16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h6>LKR 320.00</h6><br>
                        <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Rate Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card component-card_4" style="width: 100%;margin-top: 20px;">
        <div class="card-body">
            <div class="user-info">
                <h4 class="card-user_name" style="font-weight: bold;margin-bottom: 30px;">Colombo -
                    Thangalla 2020-08-02 ( Chandimal Super Line )</h4>
                <div class="row">
                    <div class="col-md-8">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Bus Type</th>
                                    <td style="padding-left: 40px;">Semi Luxury</td>
                                </tr>
                                <tr>
                                    <th>Bus Number</th>
                                    <td style="padding-left: 40px;">N/A 8267</td>
                                </tr>
                                <tr>
                                    <th>Route Number</th>
                                    <td style="padding-left: 40px;">02</td>
                                </tr>
                                <tr>
                                    <th>Seat Number</th>
                                    <td style="padding-left: 40px;">16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h6>LKR 320.00</h6><br>
                        <h4 style="font-weight: bold;">Total LKR 320.00</h4><br><br>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Rate Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="height: 400px;overflow-y: auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siriwardana Super Line</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                    </div>
                    <br>
                    <div class="form-row form-group mb-4">
                        <label for="inputAddress">Select Your Comment Type</label>
                        <select id="inputState" class="form-control selectpicker">
                            <option selected="">Choose...</option>
                            <option>Highly Recommend</option>
                            <option>Recommend</option>
                            <option>Fair</option>
                            <option>Not Recommend</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                </div>
            </div>
        </div>
    </div>

    <div class="paginating-container pagination-solid" style="margin-top: 20px;float: right;">
        <ul class="pagination">
            <li class="prev"><a href="javascript:void(0);">Prev</a></li>
            <li><a href="javascript:void(0);">1</a></li>
            <li class="active"><a href="javascript:void(0);">1</a></li>
            <li><a href="javascript:void(0);">3</a></li>
            <li class="next"><a href="javascript:void(0);">Next</a></li>
        </ul>
    </div>

    </div>

</body>

</html>