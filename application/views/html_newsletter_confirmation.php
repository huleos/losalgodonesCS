<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subscribe confirmation!</title>
	<meta name="description" content="Thanks for subscription <?= $Cname ?>" />
</head>
<body style="margin:0;padding:0;">

<table class="body" width="100%" bgcolor="#f0f2f1" border="0" align="center" cellpadding="0" cellspacing="0"
style="
	color: #525252;
	font-family: 'Verdana','Helvetica','Arial',sans-serif;
	font-weight: normal;
	padding: 0;
	margin: 0;
	text-align: left;
  line-height: 19px;
  font-size: 16px;
" 
>
	<tr>
		<td>
			<table width="100%" align="center">
				<tr>
					<td height="35">&nbsp;</td>
				</tr>
			</table>
			<!-- Header -->
			<table width="580" align="center" class="container">
				<tr>
					<td>

						<table width="580" align="center" class="row">
							<tr>
								<td>
									<table width="308" border="0" align="center" cellpadding="0" cellspacing="0">
										<tr>
											<td>
												<img src="<?= base_url(); ?>static/img/logo-los-algodones.png" alt="" 
												style="
														border: none;
														outline: none;
														text-decoration: none;
														-ms-interpolation-mode: bicubic;
														width: auto;
														max-width: 100%;
														float: left;
														clear: both;
														display: block;
												" 
												>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

						<table width="100%" align="center">
							<tr>
								<td height="25">&nbsp;</td>
							</tr>
						</table>

						<table width="100%" bgcolor="#ffffff" class="block" style="
						  border-radius: 4px;
						  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
						  padding: 40px;
						">
							<tr>
								<td style="font-size: 24px;">
									Thanks for subscription!
								</td>
							</tr>
							<tr>
									<td height="10">&nbsp;</td>
								</tr>	
							<tr>
								<td>
									<strong><?= $Cname ?></strong> your email <strong><?= $Cmail ?></strong> has been subscribed.
								</td>
							</tr>
						</table>

						<table width="100%" align="center">
							<tr>
								<td height="25">&nbsp;</td>
							</tr>
							<tr>
								<td style="text-align: center;">&copy; <?= date('Y'); ?> Los Algodones</td>
							</tr>
							<tr>
								<td height="25">&nbsp;</td>
							</tr>
						</table>

					</td>
				</tr>
			</table>
			<!-- Header -->
		</td>
	</tr>
</table>


<!-- SCRIPTS -->
</body>
</html>