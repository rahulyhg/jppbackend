<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit news</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editnewssubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" row" style="display:none;">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("type",$type,set_value('type',$before->type));?>
<label for="Type">Type</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name in Hindi</label>
<input type="text" id="Name" name="hname" value='<?php echo set_value('hname',$before->hname);?>'>
</div>
</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image',$before->image);?>">
				</div>
			</div>
			 <span style=" display: block;
   "> 717px X 564px</span>
		</div>
		<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->logo == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->logo; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Logo</span>
					<input name="logo" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('logo',$before->logo);?>">
				</div>
			</div>
			 <span style=" display: block;
   "></span>
		</div>
		<div class="row">
<div class="input-field col s6">
<label for="link">Link</label>
<input type="text" id="link" name="link" value='<?php echo set_value('link',$before->link);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Timestamp">Timestamp</label>
<input type="text" id="Timestamp" name="timestamp" value='<?php echo set_value('timestamp',$before->timestamp);?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>Content</label>
<textarea name="content" placeholder="Enter text ..."><?php echo set_value( 'content',$before->content);?></textarea>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="hcontent" class="materialize-textarea" length="400"><?php echo set_value( 'hcontent',$before->hcontent);?></textarea>
<label>Content in Hindi</label>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewnews"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
