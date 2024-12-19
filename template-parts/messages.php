<?php
/**
 * Template Name: Messages
 */
?>

<?php include 'portal-header.php'; ?>


  <div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h4 class="fw-semibold mb-0">Messages</h4>
</div>
    
    <div class="chat-wrapper">
      
      <div class="card w-100">
        <div class="chat-sidebar-single active">
          <div class="info">
            <h2 class="text-md mb-0">LX Network</h2>
          </div>
        </div><!-- chat-sidebar-single end -->
        <div class="chat-message-list">
          
          <?php
          // Display all messages from the custom messages table
            global $wpdb;
            $table_name = $wpdb->prefix . 'user_messages';

            // Fetch messages ordered by creation date (newest first)
            $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

            ?>
            <div class="container">
                <?php if ($messages): ?>
            <ul class="mb-20">
            <?php foreach ($messages as $message): ?>
              <div class="chat-single-message left">
                <div class="chat-message-content">
                  <p><?php echo esc_html($message->message); ?></p>
                  <small>Sent on: <?php echo esc_html(date('F j, Y, g:i a', strtotime($message->created_at))); ?></small>
              </div>  
            </div>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <p>No messages found.</p>
        <?php endif; ?>
        </div>
      </div>
    </div>
    
    </div>
    
  </div>

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 LX Network. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">Parallel Digital</span></p>
    </div>
  </div>
</footer>
</main>
  <?php include 'portal-footer.php'; ?>
</body>
</html>