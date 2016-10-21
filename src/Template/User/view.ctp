<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Social Accounts'), ['controller' => 'SocialAccounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Account'), ['controller' => 'SocialAccounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'User', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'User', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $user->has('user') ? $this->Html->link($user->user->id, ['controller' => 'Users', 'action' => 'view', $user->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Social Accounts') ?></h4>
        <?php if (!empty($user->social_accounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Reference') ?></th>
                <th scope="col"><?= __('Avatar') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Token') ?></th>
                <th scope="col"><?= __('Token Secret') ?></th>
                <th scope="col"><?= __('Token Expires') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->social_accounts as $socialAccounts): ?>
            <tr>
                <td><?= h($socialAccounts->id) ?></td>
                <td><?= h($socialAccounts->user_id) ?></td>
                <td><?= h($socialAccounts->provider) ?></td>
                <td><?= h($socialAccounts->username) ?></td>
                <td><?= h($socialAccounts->reference) ?></td>
                <td><?= h($socialAccounts->avatar) ?></td>
                <td><?= h($socialAccounts->description) ?></td>
                <td><?= h($socialAccounts->link) ?></td>
                <td><?= h($socialAccounts->token) ?></td>
                <td><?= h($socialAccounts->token_secret) ?></td>
                <td><?= h($socialAccounts->token_expires) ?></td>
                <td><?= h($socialAccounts->active) ?></td>
                <td><?= h($socialAccounts->data) ?></td>
                <td><?= h($socialAccounts->created) ?></td>
                <td><?= h($socialAccounts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SocialAccounts', 'action' => 'view', $socialAccounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SocialAccounts', 'action' => 'edit', $socialAccounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SocialAccounts', 'action' => 'delete', $socialAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialAccounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User') ?></h4>
        <?php if (!empty($user->user)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user as $user): ?>
            <tr>
                <td><?= h($user->id) ?></td>
                <td><?= h($user->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'User', 'action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'User', 'action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'User', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
