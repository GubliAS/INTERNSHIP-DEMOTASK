<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    collapsed: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <!-- TODO: Replace with markup from template dashboard.html sidebar -->
    <aside class="main-sidebar" :class="{ collapsed }">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <Link href="/dashboard" class="nav-link">Dashboard</Link>
                </li>
                <li class="nav-item">
                    <Link href="/profile" class="nav-link">Profile</Link>
                </li>
                <li class="nav-item">
                    <Link href="/" class="nav-link">Home</Link>
                </li>
            </ul>
        </nav>
    </aside>
</template>
