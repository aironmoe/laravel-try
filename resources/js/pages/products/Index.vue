    <script setup lang="ts">
    import AppLayout from '@/layouts/AppLayout.vue';
    import { dashboard } from '@/routes';
    import { type BreadcrumbItem } from '@/types';
    import { Head } from '@inertiajs/vue3';
    import Button from '@/components/ui/button/Button.vue';
    import products  from "@/routes/products";

    const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Products',
            href: products.index(),
        },
    ];
    </script>

    <template>
        <Head title="Product" />

        <AppLayout :breadcrumbs="breadcrumbs">
            <div
                class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
            >
                <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                    <Button>Add Inventory</Button>
                </div>
                <div
                    class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
            </div>
        </AppLayout>
    </template>
