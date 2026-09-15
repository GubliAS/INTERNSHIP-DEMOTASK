<script setup>
defineProps({
    value: {
        type: [String, Number],
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        default: '',
    },
    color: {
        type: String,
        default: 'primary',
    },
    trend: {
        type: String,
        default: '',
    },
});
</script>

<template>
    <!-- TODO: Match stats card markup/classes from dashboard.html -->
    <div class="small-box" :class="`bg-${color}`">
        <div class="inner">
            <h3>{{ value }}</h3>
            <p>{{ label }}</p>
        </div>
        <div v-if="trend" class="small-box-footer">{{ trend }}</div>
    </div>
</template>
