<?php
class ControllerExtensionFeedPsIndexNow extends Controller
{
    public function index()
    {
        if (!$this->config->get('feed_ps_indexnow_status')) {
            return;
        }
    }
}
