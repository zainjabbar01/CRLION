<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo $type; ?></h2>
        <ol class="breadcrumb">
            <li>
                <?php echo $type; ?>
            </li>
            <li>
                <a>More</a>
            </li>
            <li class="active">
                <strong>Detail</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?php echo $type; ?></h5>
                    <div class="pull-right" style="margin-top: -5px;">
                    	<a class="btn btn-primary btn-sm" href="<?=PROJECT_PATH?>sponsor/newtype/<?=$type_id?>">Add New <?=$type?></a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="data_grid">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>	

<script language="javascript">
$(document).ready(function () {
	refreshDataGrid()
});

var table_grid;
function refreshDataGrid(group_id) {
	
	if(table_grid)
		table_grid.clear().draw();
		
	if('<?php echo $type; ?>' == '')
		return false;
	
	table_grid	= $('#data_grid').DataTable({		
			"lengthChange"	: false,		
			"paging"		: true,
			"pageLength"	: 200,
			//"info"			: false,				
			"destroy"		: true,	
			//"autoWidth"		: false,
			"width" : "90%",
			//"scrollX"		: "110%",
			"scrollY"		: 520,
			//"searching"		: false,
			"ordering"		: false,
			"oLanguage": {
				"sLoadingRecords": this.getLoadingIcon()
			},
			"fnDrawCallback": function ( oSettings ) {
				//$(oSettings.nTHead).hide();
			},
			"columns": [
				{ "title": "", "class": "left"	, "sortable" : false, data: 'speaker_id', "render": function ( data, type, row ) {
						return '<div class="col-sm-11" style="padding-left:0px"><img src="<?=PROJECT_PATH?>uploads/speakers/'+row['image_name']+'?id=<?=time()?>" style="width:50px;50px;"><br></div>'; //+ ' - ' + row['speaker_id'] 
                	} 
				},
				{ "title": "Name", "class": "left"	, "sortable" : false, data: 'speaker_name', "render": function ( data, type, row ) {
						designation = ''
						if(row['designation'] != null) 
							designation = '<br><span style="font-size:11px;"><b>Designation:&nbsp;&nbsp;</b>'+row['designation']+'</span>';
						return '<div class="col-sm-11" style="padding-left:0px">' + data + designation + '</div>'; //+ ' - ' + row['speaker_id'] 
                	} 
				}, {
					data:"", title:'', render: function(data, type, row) {
						var extra	= ' <a style="font-size:18px;color:#737373;" href="/matchmaking/admin/typedetail/<?=$type_id?>/'+row['speaker_id'] + '"><span class="fa fa-trash"></span></a> ';
						if(row['is_active']=='N')
							extra	= ' <a style="font-size:18px;color:#737373;"><span class="fa fa-unlock"></span></a> ';
						return '<div class="pull-right"><a style="font-size:18px;color:#737373;" href="/matchmaking/newtype/<?=$type_id?>/' + row['speaker_id'] + '"><span class="fa fa-edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;'+extra+'</div>';
					}
				}
				/*,
				{
               		data:   null,
					title: '<input type="checkbox" class="editor-active" id="chk_all_employees">',
					render: function ( data, type, row ) {
						if ( type === 'display' ) {
							return '<input type="checkbox" id="chk_employees" value="' + row['employee_id'] + '">';
						}
						return data;
					},
					className: "dt-body-center"
				}*/
			],			
			"ajax": {
				//url: 'get_addressbook_data.php',
				type: "POST",				
				data:{"get_filter_data":"Y", 'type':'<?php echo $type; ?>',},
				"dataType": "json"
			},
			
	});	
	
	$("#data_grid_paginate").parent().addClass("col-sm-12");
	$("#data_grid_paginate").parent().removeClass("col-sm-6").removeClass("col-sm-7")
	$(".dataTables_scrollBody").css("overflow-x",  "hidden");
	//$(".dataTables_scrollBody").slimScroll({height:$(window).height()-225});
	$(".dataTables_wrapper").css("padding-bottom",  "0px");
	$("div.dataTables_scrollBody table").css('border-right','none').css('border-left','none');
	//$("#data_grid_filter").css('display', 'none');
	
}


function getLoadingIcon() {
	return '<div class="spiner-example">' +
                                '<div class="sk-spinner sk-spinner-three-bounce">' +
                                    '<div class="sk-bounce1"></div>' +
                                    '<div class="sk-bounce2"></div>' +
                                    '<div class="sk-bounce3"></div>' +
                                '</div>' +
                            '</div>';	
}
</script>