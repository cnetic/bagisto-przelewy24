<template>
<div>
    <el-button>Test Api Connection</el-button>
</div>
</template>

<script>
import {
    Button,
    ButtonGroup
} from 'element-ui';

export default {
    name: "connection-test",
    props: {

    },
    data() {
        return {}
    },
    components: {
        'el-button': Button
    },
    mounted() {
        alert(1);
    }
};
</script>
