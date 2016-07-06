<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Social Profiles'), ['controller' => 'SocialProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Profile'), ['controller' => 'SocialProfiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Social Profiles') ?></h4>
        <?php if (!empty($user->social_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Provider') ?></th>
                <th><?= __('Identifier') ?></th>
                <th><?= __('Profile Url') ?></th>
                <th><?= __('Website Url') ?></th>
                <th><?= __('Photo Url') ?></th>
                <th><?= __('Display Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Language') ?></th>
                <th><?= __('Age') ?></th>
                <th><?= __('Birth Day') ?></th>
                <th><?= __('Birth Month') ?></th>
                <th><?= __('Birth Year') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Email Verified') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Region') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Zip') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->social_profiles as $socialProfiles): ?>
            <tr>
                <td><?= h($socialProfiles->id) ?></td>
                <td><?= h($socialProfiles->user_id) ?></td>
                <td><?= h($socialProfiles->provider) ?></td>
                <td><?= h($socialProfiles->identifier) ?></td>
                <td><?= h($socialProfiles->profile_url) ?></td>
                <td><?= h($socialProfiles->website_url) ?></td>
                <td><?= h($socialProfiles->photo_url) ?></td>
                <td><?= h($socialProfiles->display_name) ?></td>
                <td><?= h($socialProfiles->description) ?></td>
                <td><?= h($socialProfiles->first_name) ?></td>
                <td><?= h($socialProfiles->last_name) ?></td>
                <td><?= h($socialProfiles->gender) ?></td>
                <td><?= h($socialProfiles->language) ?></td>
                <td><?= h($socialProfiles->age) ?></td>
                <td><?= h($socialProfiles->birth_day) ?></td>
                <td><?= h($socialProfiles->birth_month) ?></td>
                <td><?= h($socialProfiles->birth_year) ?></td>
                <td><?= h($socialProfiles->email) ?></td>
                <td><?= h($socialProfiles->email_verified) ?></td>
                <td><?= h($socialProfiles->phone) ?></td>
                <td><?= h($socialProfiles->address) ?></td>
                <td><?= h($socialProfiles->country) ?></td>
                <td><?= h($socialProfiles->region) ?></td>
                <td><?= h($socialProfiles->city) ?></td>
                <td><?= h($socialProfiles->zip) ?></td>
                <td><?= h($socialProfiles->created) ?></td>
                <td><?= h($socialProfiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SocialProfiles', 'action' => 'view', $socialProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SocialProfiles', 'action' => 'edit', $socialProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SocialProfiles', 'action' => 'delete', $socialProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
