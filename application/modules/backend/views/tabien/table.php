<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ระบบจัดการทะเบียน</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <div class="row m-0 p-0 my-3 d-flex justify-content-between">
        <div class="col-12 col-sm-4 m-0 p-0">
            <div class="m-1">
                <a href="<?php echo base_url('backend/tabien/create_form') ?>" class="btn btn-primary p-2 shadow-sm w-100">เพิ่มทะเบียน</a>
            </div>
        </div>
        <div class="col-12 col-sm-2 m-0 p-0">
            <div class="m-1">
                <div class="btn btn-muted shadow-sm p-2 w-100">แก้ไขทะเบียน</div>
            </div>
        </div>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ฐานข้อมูลทะเบียนรถ</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                </table>
            </div>

        </div>

    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "<?php echo base_url()  ?>backend/tabien/get_tabien",
                data: {},
            }).done(function(data) {
                console.log(data)

                let n = 1
                var tableData = []
                for (var i = 0; i < data.length; i++) {

                    let price = numberWithCommas(data[i].price)

                    tableData.push([
                        `${n++}`,
                        `<img src="<?php echo base_url() ?>/issets/img/tag/${data[i].img}" class="w-100" />`,
                        `${data[i].name}`,
                        `${price} <i class="fas fa-dollar-sign"></i>`,
                        `${data[i].status}`,
                        `<div class="btn-group w-100" role="group">
                        <button type="button"   data-id="${data[i].id}" data-name="${data[i].name}" class="delete btn btn-success"><p class="m-0 p-0 font-weight-bold ">
                <i class="fas fa-trash m-0 p-0"></i>
                เรียกดู</p></button>
                <a  href="<?php echo base_url() ?>backend/tabien/update_form/" type="button" name="update"    class="update btn btn-warning "><p class="m-0 p-0 font-weight-bold ">
                <i class="fas fa-pen m-0 p-0"></i>
                แก้ไข</p></a>
                <button type="button" name="delete"  data-id="${data[i].id}" data-name="${data[i].name}" class="delete btn btn-danger"><p class="m-0 p-0 font-weight-bold ">
                <i class="fas fa-trash m-0 p-0"></i>
                ลบ</p></button>
                </div>`,

                    ]);
                };
                initDataTables(tableData);
            })

            function initDataTables(tableData) { // สร้าง datatable
                $('#datatable').DataTable({
                    data: tableData,
                    columns: [{
                            title: "ลำดับ",
                            width: "5%"
                        },
                        {
                            title: "รูปภาพ",
                            width: "10%"
                        },
                        {
                            title: "หมายเลข",
                            width: "30%"
                        },
                        {
                            title: "ราคา",
                        },

                        {
                            title: "สถานะ",
                        },
                        {
                            title: "จัดการ",
                        },
                    ],
                    initComplete: function() { // เรียกใช้งาน ลบข้อมูล datatable
                        $(document).on('click', '.delete', function() {
                            let id = $(this).data('id')
                            Swal.fire({
                                text: "คุณแน่ใจหรือไม่...ที่จะลบรายการนี้?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'ใช่! ลบเลย',
                                cancelButtonText: 'ยกเลิก'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url()  ?>backend/tabien/delete_tabien",
                                        data: {
                                            id: id
                                        }
                                    }).done(function() {
                                        Swal.fire({
                                            text: 'รายการของคุณถูกลบเรียบร้อย',
                                            icon: 'success',
                                            confirmButtonText: 'ตกลง',
                                        }).then((result) => {
                                            location.reload();
                                        });
                                    })
                                }
                            })
                        })
                        // .on('change', '.toggle-event', function() {
                        //     toastr.success('อัพเดทข้อมูลเสร็จเรียบร้อย')
                        // })
                    },
                    responsive: true

                })
            }
        })
    </script>