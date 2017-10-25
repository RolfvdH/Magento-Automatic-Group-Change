 <?php
    class RvdH_GroupChange_Model_Observer
    {

public function changeGroup(Varien_Event_Observer $observer)
{
    $order = $observer->getEvent()->getOrder();
    $customer = Mage::getModel('customer/customer')->load($order->getCustomerId());

    /*$event = $observer->getEvent(); //Fetches the current event"
    $customer = $event->getCustomer();
    $dbcustomer = Mage::getModel('customer/customer')->load($customer[entity_id]);*/

    // ensure it's not guest checkout
    if ($customer->getId()) {

        $customer->setGroupId(5);
        $customer->save();
        
    }
}
}