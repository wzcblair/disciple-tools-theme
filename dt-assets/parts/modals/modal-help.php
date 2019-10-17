<div class="reveal" id="help-modal" data-reveal>


    <!--    Contact Status-->
    <div class="help-section" id="overall-status-help-text" style="display: none">
        <h3 class="lead"><?php esc_html_e( "Contact Status", 'disciple_tools' ) ?></h3>
        <p><?php esc_html_e( "This is where you set the current status of the contact.", 'disciple_tools' ) ?></p>
        <ul>
            <li><?php esc_html_e( "New Contact - The contact is new in the system", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Not Ready - There is not enough information to move forward with the contact at this time.", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Dispatch Needed - This contact needs to be assigned to a multiplier.", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Waiting to be accepted - The contact has been assigned to someone, but has not yet been accepted by that person.", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Active - The contact is progressing and/or continually being updated.", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Paused - This contact is currently on hold (i.e. on vacation or not responding).", 'disciple_tools' ) ?></li>
            <li><?php esc_html_e( "Closed - This contact has made it known that they no longer want to continue or you have decided not to continue with him/her.", 'disciple_tools' ) ?></li>
        </ul>
    </div>


    <div class="help-section" id="quick-action-help-text" style="display: none">
        <h3 class="lead">Quick action buttons</h3>
        <p>These quick action buttons are here to aid you in updating the contact record.
        They track how many times each one has been used.</p>
        <p>They also update the "Seeker Path" below. For example,
            If you click the "No Answer" button 4 times, a number will be added to "No Answer" meaning that you have
            attempted to call the contact 4 times, but they didn't answer.
            This will also change the "Seeker Path" below to "Contact Attempted".
        </p>
    </div>
    <div class="help-section" id="contact-progress-help-text" style="display: none">
        <h3 class="lead">Contact Progress</h3>
        <p>Here you can track the progress of a contact's faith journey.</p>
    </div>
    <div class="help-section" id="seeker-path-help-text" style="display: none">
        <h3 class="lead">Seeker Path</h3>
        <p>This is where you set the status of your progression with the contact.</p>
    </div>
    <div class="help-section" id="faith-milestones-help-text" style="display: none">
        <h3 class="lead">Faith Milestones</h3>
        <p>This is where you set which milestones the contact has reached in their faith journey.</p>
    </div>

    <!--  Health Metrics  -->
    <div class="help-section" id="health-metrics-help-text" style="display: none">
        <h3 class="lead">Health Metrics</h3>
        <p> Here you can track the progress of a group/church.</p>
        <p>If the group has committed to be a church, click the "Covenant" button to make the dotted line circle solid.</p>
        <p>If the group/church regularly practices any of the following elements then click
            each element to add them inside the circle.</p>
    </div>

    <!--  Group type  -->
    <div class="help-section" id="group-type-help-text" style="display: none">
        <h3 class="lead"><?php esc_html_e( "Group type", 'disciple_tools' ) ?></h3>
        <p>Here you can select whether the group is a pre-group, group or church.</p>
        <p>We define a pre-group as having x people. We define a group as having x people.</p>
        <p>We define a church as having 3 or more believers.</p>
    </div>

    <!--  Group Status  -->
    <div class="help-section" id="group-status-help-text" style="display: none">
        <h3 class="lead">Group Status</h3>
        <p>This is where you set the current status of the group. </p>
        <ul>
            <li>
                Active - the group is actively meeting and is continually being updated.
            </li>
            <li>
                Inactive - The group is no longer meeting at this time.
            </li>
        </ul>
    </div>

    <!--  Group Parents, Peers and Children  -->
    <div class="help-section" id="group-connections-help-text" style="display: none">
        <h3 class="lead">Group Connections. Parent, Peer and Child Groups</h3>
        <p>Here you can select whether the group is a pre-group, group, church or team.</p>
        <h4>Group Type:</h4>
         <ul>
            <li>Pre-group - a predominantly a non-believers group </li>
            <li>Group - having 3 or more believers but not identifying as church</li>
             <li>Church - having 3 or more believers and identifying as church  </li>
             <li>Team - a special group that is not meeting for or trying to become church).</li>
        </ul>

<h4>Group Connections. Parent, Peer and Child Groups</h4>

        <ul>
            <li>Parent Group: The group that founded this group.</li>
        <li>Peer Group: Related groups that aren’t parent/child in relationship. It might indicate groups that collaborate, are about to merge, recently split, etc.</li>
        <li>Child Groups: A group that has been birthed out of this group.</li>
        </ul>
    </div>

    <!--    -->
    <div class="help-section" id="-help-text" style="display: none">
        <h3 class="lead"></h3>
        <p></p>
    </div>

    <!--    -->
    <div class="help-section" id="-help-text" style="display: none">
        <h3 class="lead"></h3>
        <p></p>
    </div>




    <div class="grid-x">
        <button class="button" data-close aria-label="Close reveal" type="button">
            <?php esc_html_e( 'Close', 'disciple_tools' )?>
        </button>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
