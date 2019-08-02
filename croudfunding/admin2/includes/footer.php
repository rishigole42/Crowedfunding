<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2019 <a href="" target="_blank">E-DISHA</a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets\vendor\jquery\jquery.min.js"></script>
		<script src="assets\vendor\bootstrap\js\bootstrap.min.js"></script>
		<script src="assets\vendor\pace\pace.min.js"></script>
		<script src="assets\vendor\summernote\summernote.min.js"></script>
		<script src="assets\vendor\markdown\markdown.js"></script>
        <script src="assets\vendor\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
		<script src="assets\vendor\to-markdown\to-markdown.js"></script>
		<script src="assets\vendor\bootstrap-markdown\bootstrap-markdown.js"></script>
		<script src="assets\scripts\klorofilpro-common.min.js"></script>
		<!-- DEMO PANEL -->
		<!-- for demo purpose only, you should remove it on your project directory -->
		<script type="text/javascript">
		var toggleDemoPanel = function(e)
		{
			e.preventDefault();
			var panel = document.getElementById('demo-panel');
			if (panel.className) panel.className = '';
			else panel.className = 'active';
		}
		// fix each iframe src when back button is clicked
		$(function()
		{
			$('iframe').each(function()
			{
				this.src = this.src;
			});
		});
		</script>
			<script>
		$(function()
		{
			/*-----------------------------------/
			/*	DATE PICKER
			/*----------------------------------*/
			$('.inline-datepicker').datepicker(
			{
				todayHighlight: true
			});
			/*-----------------------------------/
			/*	COLOR PICKER
			/*----------------------------------*/
			$('#demo-colorpicker1').colorpicker(
			{
				align: 'left'
			});
			$('#demo-colorpicker2').colorpicker(
			{
				align: 'left',
				format: 'rgba'
			});
			$('#demo-colorpicker3').colorpicker();
			$('#demo-colorpicker4').colorpicker(
			{
				colorSelectors:
				{
					'#000000': '#000000',
					'#00AAFF': '#00AAFF',
					'#41B314': '#41B314',
					'#e4cb10': '#e4cb10',
					'#F9354C': '#F9354C',
					'#5bc0de': '#5bc0de',
					'#777777': '#777777'
				}
			});
			$('#colorpicker-inline').colorpicker(
			{
				color: '#41B314',
				container: true,
				inline: true
			});
			$('#demo-colorpicker5').colorpicker().on('changeColor', function(e)
			{
				$('#demo-colorpicker5').css('background-color', e.color.toString('rgba'));
			});
			/*-----------------------------------/
			/*	BOOTSTRAP CLOCK PICKER
			/*----------------------------------*/
			$('.basic-clockpicker').clockpicker(
			{
				donetext: 'DONE',
			});
			var input = $('#single-input').clockpicker(
			{
				placement: 'top',
				autoclose: true,
				'default': 'now'
			});
			$('#check-minutes').click(function(e)
			{
				// Have to stop propagation here
				e.stopPropagation();
				input.clockpicker('show').clockpicker('toggleView', 'minutes');
			});
		});
	 
		</script>
		<div id="demo-panel">	<!--
			<a href="#" onclick="toggleDemoPanel(event);"><i class="fa fa-cog fa-spin"></i></a>
			<iframe src="demo-panel\index.html"></iframe>
		</div>
		END DEMO PANEL -->
		<script>
		$(function()
		{
			// summernote editor
			$('.summernote').summernote(
			{
				height: 300,
				focus: true,
				onpaste: function()
				{
					alert('You have pasted something to the editor');
				}
			});
			// markdown editor
			var initContent = '<h4>Hello there</h4> ' +
				'<p>How are you? I have below task for you :</p> ' +
				'<p>Select from this text... Click the bold on THIS WORD and make THESE ONE italic, ' +
				'link GOOGLE to google.com, ' +
				'test to insert image (and try to tab after write the image description)</p>' +
				'<p>Test Preview And ending here...</p> ' +
				'<p>Click "List"</p> Enjoy!';
			$('#markdown-editor').text(toMarkdown(initContent));
		});
		</script>
	</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0484'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>