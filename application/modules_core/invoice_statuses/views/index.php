<?php $this->load->view('header'); ?>

<div class="grid_8" id="content_wrapper">

	<div class="section_wrapper">

		<h3 class="title_black"><?php echo $this->lang->line('invoice_statuses'); ?></h3>

		<div class="content toggle no_padding">

			<table style="width: 100%;">
				<tr>
					<th scope="col" class="first"><?php echo $this->lang->line('invoice_status'); ?></th>
					<th scope="col"><?php echo $this->lang->line('invoice_status_type'); ?></th>
					<th scope="col" class="last"><?php echo $this->lang->line('actions'); ?></th>
				</tr>
				<?php foreach ($invoice_statuses as $invoice_status) { ?>
				<tr class="hoverall">
					<td class="first"><?php echo $invoice_status->invoice_status; ?></td>
					<td><?php echo $this->mdl_invoice_statuses->status_types[$invoice_status->invoice_status_type]; ?></td>
					<td class="last">
						<a href="<?php echo site_url('invoice_statuses/form/invoice_status_id/' . $invoice_status->invoice_status_id); ?>" title="<?php echo $this->lang->line('edit'); ?>">
							<?php echo icon('edit'); ?>
						</a>
						<a href="<?php echo site_url('invoice_statuses/delete/invoice_status_id/' . $invoice_status->invoice_status_id); ?>" title="<?php echo $this->lang->line('delete'); ?>" onclick="javascript:if(!confirm('<?php echo $this->lang->line('confirm_delete'); ?>')) return false">
							<?php echo icon('delete'); ?>
						</a>
					</td>
				</tr>
				<?php } ?>
			</table>

			<?php if ($this->mdl_invoice_statuses->page_links) { ?>
			<div id="pagination">
				<?php echo $this->mdl_invoice_statuses->page_links; ?>
			</div>
			<?php } ?>

		</div>

	</div>

</div>

<?php echo $actions_panel; ?>

<?php $this->load->view('footer'); ?>