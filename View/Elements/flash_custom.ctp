<?php
$alertClass = '';
$iconClass = '';
$bgGradient = '';

switch($class) {
    case 'success':
        $alertClass = 'from-emerald-50 to-teal-50 border-emerald-500';
        $iconClass = 'bg-emerald-500';
        $textColorPrimary = 'text-emerald-800';
        $textColorSecondary = 'text-emerald-600';
        $icon = 'fas fa-check';
        break;
    case 'error':
        $alertClass = 'from-red-50 to-pink-50 border-red-500';
        $iconClass = 'bg-red-500';
        $textColorPrimary = 'text-red-800';
        $textColorSecondary = 'text-red-600';
        $icon = 'fas fa-times';
        break;
    case 'warning':
        $alertClass = 'from-amber-50 to-yellow-50 border-amber-500';
        $iconClass = 'bg-amber-500';
        $textColorPrimary = 'text-amber-800';
        $textColorSecondary = 'text-amber-600';
        $icon = 'fas fa-exclamation-triangle';
        break;
    case 'info':
        $alertClass = 'from-blue-50 to-cyan-50 border-blue-500';
        $iconClass = 'bg-blue-500';
        $textColorPrimary = 'text-blue-800';
        $textColorSecondary = 'text-blue-600';
        $icon = 'fas fa-info-circle';
        break;
    default:
        $alertClass = 'from-gray-50 to-slate-50 border-gray-500';
        $iconClass = 'bg-gray-500';
        $textColorPrimary = 'text-gray-800';
        $textColorSecondary = 'text-gray-600';
        $icon = 'fas fa-bell';
}
?>

<div class="mb-8 bg-gradient-to-r <?php echo $alertClass; ?> border-l-4 rounded-lg shadow-sm p-4 animate-fade-in">
    <div class="flex items-center gap-3">
        <div class="<?php echo $iconClass; ?> rounded-full p-2">
            <i class="<?php echo $icon; ?> text-white text-lg"></i>
        </div>
        <div>
            <p class="<?php echo $textColorPrimary; ?> font-semibold"><?php echo h($message); ?></p>
            <?php if (!empty($title)): ?>
                <p class="<?php echo $textColorSecondary; ?> text-sm"><?php echo h($title); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>