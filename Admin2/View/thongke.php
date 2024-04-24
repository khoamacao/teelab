 
        <meta charset="UTF-8">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
     google.setOnLoadCallback(drawVisualization);
     function drawVisualization() {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
            // B1: tạo bảng dữ liệu
            var data=new google.visualization.DataTable();
            var rows=new Array();
            var tenhh=new Array();
            var soluongban=new Array();
            var dataten=0;
            var slb=0;
            //  lấy dữ liệu từ câu truy vấn thống kê
            <?php
              $hh=new hanghoa();
              $result=$hh->getThongke();
              while($set=$result->fetch())
              {
                $tenhh=$set['tenhh'];
                $soluong=$set['soluong'];
                // đem biến $tenhh và $soluong truyền vào biến JS
                echo "tenhh.push('".$tenhh."');";
                echo "soluongban.push('".$soluong."');";
              }
            ?>
            // tạo dòng
            // duyệt qua từng mảng của tenhh và soluong ban
            for(var i=0;i<tenhh.length;i++)
            {
              dataten=tenhh[i];
              slb=parseInt(soluongban[i]);
              rows.push([dataten,slb]);
            }

            // tạo cột
            data.addColumn('string','Tên hàng hóa');
            data.addColumn('number','Số lượng bán');
            data.addRows(rows);
            // b2: tạo những options
            var options={
              title:'Thống kê số lượng bán',
              'width':600,
              'height':500,
              'backgroundColor':'#ffffff',
              is3D:true,
            };
            //b3: tiến hành vẽ khi có data và option
            var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data,options);
                   
	 }
                   
    </script>
        <div class="thongke">
        <div class="thongke">
         
        <div style=" width:100%;  float: left;"   id="chart_div">dfsf</div>
        <select name="" id="">
            <option value="2023">2023</option>
            <option value="2023">2024</option>
          </select>
       
      </div>
       
      
     
 
 